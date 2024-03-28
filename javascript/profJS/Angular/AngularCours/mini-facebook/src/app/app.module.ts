import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PostComponent } from './post/post.component';
import { FormsModule } from '@angular/forms';
import { TestcomponentComponent } from './testcomponent/testcomponent.component';
import { DataService } from './data.service';
// import { HeroesComponent } from './heroes/heroes.component'

@NgModule({
  declarations: [
    AppComponent,
    PostComponent,
    TestcomponentComponent,
    // HeroesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [DataService],
  bootstrap: [AppComponent]
})
export class AppModule { }
