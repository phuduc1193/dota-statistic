import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-navbar',
  templateUrl: './navbar.component.html',
  styleUrls: ['./navbar.component.css'],
  host: { '(document:click)': 'onClick($event)' }
})
export class NavbarComponent implements OnInit {
  public isCollapsed: boolean
  constructor() { this.isCollapsed = true }

  ngOnInit() {
  }
  
  onClick($event: any){
    if (($event.target.classList.contains('navbar-toggle')) || ($event.target.classList.contains('icon-bar')))
      this.isCollapsed = !this.isCollapsed
    else this.isCollapsed = true
  }
}
