import { Component } from '@angular/core';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  constructor() {}

  post = [
    {
      src: "../../assets/images/barbecue.jpeg",
      titre: "Super vacances !",
      contenu: "1Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    },
    {
      src: "../../assets/images/camping.jpeg",
      titre: "Mon chat trop mignon",
      contenu: "2Lorem ipsum dolor sit amet,consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    },
    {
      src: "../../assets/images/plage.jpeg",
      titre: "Après midi canapé",
      contenu: "3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."
    }
  ];
}
