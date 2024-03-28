import { Component, OnInit } from "@angular/core";
import { ActivatedRoute } from "@angular/router";
import { Location } from "@angular/common";
import { DataService } from "../service/data.service";

@Component({
  selector: "app-eleve-detail",
  templateUrl: "./eleve-detail.component.html",
  styleUrls: ["./eleve-detail.component.css"],
})
export class EleveDetailComponent implements OnInit {
  id: string;
  name: string;
  status: string;
  constructor(
    private route: ActivatedRoute,
    private dataService: DataService,
    private location: Location
  ) {}

  ngOnInit(): void {
    const id = this.route.snapshot.params["id"];
    this.id = id;
    this.name = this.dataService.getStudent(+id).name;
    this.status = this.dataService.getStudent(+id).status;
  }

  goBack(): void {
    this.location.back();
  }
}
