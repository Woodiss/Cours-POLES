import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'mon-projet';
  isAuth = true;
  onClique() {
    alert('Cliqué !');
  }

   presenceTab = [
    {
      name : "Emmanuelle",
      status : "Présent"
    },
    {
      name : "Robin",
      status : "Absent"
    },
    {
      name : "Dominique",
      status : "Présent"
    }
  ];



}
