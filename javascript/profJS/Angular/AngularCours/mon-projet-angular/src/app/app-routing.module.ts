import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { MonPremierComposantComponent } from './mon-premier-composant/mon-premier-composant.component'


const routes: Routes = [
  { path: "presences", component: MonPremierComposantComponent},
  { path: "presences/:id", component: EleveDetailComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
