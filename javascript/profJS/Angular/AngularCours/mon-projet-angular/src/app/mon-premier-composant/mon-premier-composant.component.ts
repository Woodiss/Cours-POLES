import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-mon-premier-composant',
  templateUrl: './mon-premier-composant.component.html',
  styleUrls: ['./mon-premier-composant.component.css']
})

export class MonPremierComposantComponent implements OnInit {

  // @Input() persoName: string;
  // @Input() persoStatus: string;
  persoName: string = "Emanuelle"
  persoStatus: string = "Présent"

  constructor() {

  }

  ngOnInit() {

  }

  getStatus() {
    return this.persoStatus
  }

  getColor() {
    if (this.persoStatus === "Présent") {
      return "green";
    } else if (this.persoStatus === "Absent") {
      return "red";
    } else {
      return "orange"
    }

  }

}
