import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  rotateText: string;

  constructor() {
    var textArr = ['Digital', 'Magical', 'Programming', 'Angular'];
    var curNewsIndex = -1;
    this.rotateText = textArr[0];
    setInterval(() => {
      ++curNewsIndex;
      if (curNewsIndex >= textArr.length) {
          curNewsIndex = 0;
      }
      this.rotateText = textArr[curNewsIndex];
    }, 1000);
  }

  ngOnInit() {}
}
