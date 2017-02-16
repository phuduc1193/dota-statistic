import { Component } from '@angular/core';
import { routerTransition } from './router.animations';

@Component({
  template: '<br/><br/><br/><br/><br/><br/><h2>Page not found</h2>',
  host: {'[@routerTransition]': ''},
  animations: [routerTransition()]
})
export class PageNotFoundComponent {}