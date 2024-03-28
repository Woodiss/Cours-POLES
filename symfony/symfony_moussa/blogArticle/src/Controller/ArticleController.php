<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleType;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\CommentaireRepository;
use Symfony\Component\HttpFoundation\Request;

use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/article')]
class ArticleController extends AbstractController
{
    #[Route('/', name: 'app_article_index', methods: ['GET'])]
    public function index(ArticleRepository $articleRepository, PaginatorInterface $paginator, Request $request): Response
    {

        $pagination = $paginator->paginate(
            $articleRepository->filter(), /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            2 /*limit per page*/
        );

        return $this->render('article/index.html.twig', [
            // appeler touts les article
            // 'articles' => $articleRepository->findAll(),

            // appeler les 5 dernier articles en DESC
            // 'articles' => $articleRepository->getLastInserted('App:Article', 5),

            // pour la pagination avec KNP
            'articles' => $pagination
        ]);
    }

    #[Route('/new', name: 'app_article_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Récupération du user connecté
            $article->setAuteur($this->getUser());

            $entityManager->persist($article);
            $entityManager->flush();

            // message flash
            $this->addFlash('success', 'Votre article à été ajouter');

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }
        if ($form->isSubmitted()) {
            $this->addFlash('danger', 'échec de l\'envoie');
        }


        return $this->render('article/new.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_show', methods: ['GET', 'POST'])]
    public function show(Request $request, Article $article, CommentaireRepository $commentaireRepository, EntityManagerInterface $entityManager): Response
    {
        $commentaire = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $commentaire->setUser($this->getUser());
            $commentaire->setArticle($article);

            $entityManager->persist($commentaire);
            $entityManager->flush();

            // resté sur la meme page apres avoir remplie le formulaire
            return $this->redirectToRoute('app_article_show', ['id' => $article->getId()]);
        }

        // $comments = $entityManager->getRepository(Commentaire::class);
        return $this->render('article/show.html.twig', [
            'article' => $article,
            'commentaires' => $commentaireRepository->findBy(['Article' => $article]),
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_article_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        // access control avec voter
        $this->denyAccessUnlessGranted('EDIT', $article);

        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('article/edit.html.twig', [
            'article' => $article,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_article_delete', methods: ['POST'])]
    public function delete(Request $request, Article $article, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $article->getId(), $request->request->get('_token'))) {
            $entityManager->remove($article);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_article_index', [], Response::HTTP_SEE_OTHER);
    }
}
