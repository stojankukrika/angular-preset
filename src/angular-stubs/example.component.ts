import { Component } from '@angular/core';

@Component({
    selector: 'app-root',
    template: `<h1>{{ title }}</h1>`,
})
export class ExampleComponent {
    title = 'app works!';
}