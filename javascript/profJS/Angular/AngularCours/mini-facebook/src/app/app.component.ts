import { Component, OnInit } from '@angular/core';
import { DataService } from './data.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit{
  titre = 'mini-facebook';
  post;

  constructor(private dataService : DataService) {
    this.post = this.dataService.postService
  }

  ngOnInit() {

  }


}
