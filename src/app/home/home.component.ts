import { 
  Component, OnInit,
  trigger, state, animate, transition, style 
} from '@angular/core';
import { routerTransition } from '../router.animations';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  host: {'[@routerTransition]': ''},
  animations: [
    trigger('visibilityChanged', [
      state('true' , style({ opacity: 1, transform: 'scale(1.0)' })),
      state('false', style({ opacity: 0, transform: 'scale(0.0)'  })),
      transition('1 => 0', animate('500ms')),
      transition('0 => 1', animate('900ms'))
    ]), routerTransition()
  ]
})
export class HomeComponent implements OnInit {
  fancyText: string
  isVisible: boolean = true
  textArr: Array<string>

  constructor() {
    this.textArr = ['Digital', 'Magical', 'Angular']
    this.fancyText = this.textArr[0]
  }

  ngOnInit() {
    this.animateFancyText()
  }
  
  animateFancyText(){
    let index: number = 0;
    setInterval(() => {
      ++index
      if (index >= this.textArr.length) {
          index = 0
      }
      this.isVisible = !this.isVisible
      setTimeout(() => {
        this.fancyText = this.textArr[index]
        this.isVisible = !this.isVisible
      }, 500)
    }, 2000);
  }
}
