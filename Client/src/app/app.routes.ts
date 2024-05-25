import { Routes } from '@angular/router';
import { AuthComponent } from './auth/auth.component';
import { ForgetPasswordComponent } from './auth/forget-password/forget-password.component';
import { CartComponent } from './cart/cart.component';

export const routes: Routes = [

  {
    path: "auth",
    component: AuthComponent,
    children: [
      { path: "forget-password", component: ForgetPasswordComponent },
    ]
  }
  ,{path:"cart",component:CartComponent}

];