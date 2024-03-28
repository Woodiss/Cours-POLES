import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent  implements OnInit{
  // titre = 'Titre du post';
  // contenu = 'contenue du post';

  @Input() titre: string;
  @Input() contenu: string;

  constructor() {

  }

  ngOnInit() {

  }


  show = false
  comms = ''

  clicLike() {
    this.show = true
  }

  clicDislike() {
    this.show = false
  }


}
