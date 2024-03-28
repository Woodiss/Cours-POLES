import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MonPremierComposantComponent } from './mon-premier-composant/mon-premier-composant.component';
import { FormsModule } from '@angular/forms';
import { DataService } from './service/data.service'

@NgModule({
  declarations: [
    AppComponent,
    MonPremierComposantComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [
    DataService,
  ],
  bootstrap: [AppComponent]
})

export class AppModule { }
