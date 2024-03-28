import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { TestcomponentComponent } from './testcomponent/testcomponent.component';
import { PostComponent } from './post/post.component';

const routes: Routes = [
  {
    path: "test",
    component: TestcomponentComponent
  },
  {
    path: "post",
    component: PostComponent
  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
