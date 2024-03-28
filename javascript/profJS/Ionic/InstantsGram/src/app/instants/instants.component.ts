import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-instants',
  templateUrl: './instants.component.html',
  styleUrls: ['./instants.component.scss'],
})
export class InstantsComponent  implements OnInit {

  @Input() src: string;
  @Input() titre: string;
  @Input() contenu: string;

  constructor() { }

  ngOnInit() {}

}
