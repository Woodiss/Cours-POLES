import { Component, Input, OnInit } from "@angular/core";
import { DataService } from "../service/data.service";

@Component({
  selector: "app-mon-premier-component",
  templateUrl: "./mon-premier-component.component.html",
  styleUrls: ["./mon-premier-component.component.css"],
})
export class MonPremierComponentComponent implements OnInit {
  presenceTab: any[];

  constructor(private dataService: DataService) {
    this.presenceTab = this.dataService.presenceTab;
  }

  ngOnInit() {}
}
