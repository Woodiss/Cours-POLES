import { Component, OnInit } from '@angular/core';
import { DataService } from './service/data.service'


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

export class AppComponent implements OnInit{
  constructor(){

  }

  ngOnInit() {
    
  }
  // presenceTab: any[];
  // title = 'mon-projet-angular';
  // isAuth = true;



  // onClique() {
  //   alert('Cliqué !')
  // }

  // constructor(private dataService: DataService) {

  // }

  // ngOnInit() {
  //   this.presenceTab = this.dataService.presenceTabService
  // }



}
