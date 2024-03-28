import { Component, Input, OnInit } from '@angular/core';
import { DataService } from './service/data.component';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  title = 'mon-premier-projet';
  isAuth = true;
  onClique() {
    alert('Cliqué !');
  }

  persoOne = 'Jessica';
  persoTwo = 'Enzo';
  persoThree = 'Jean';

  presenceTab: any[];
  
  constructor(private dataService: DataService) {

  }

  ngOnInit() {
    this.presenceTab = this.dataService.presenceTab;
  }

}
