import { browser, by, element } from 'protractor';

export class AppPage {
  navigateTo() {
    return browser.get('/');
  }

  getContentByFirstElement(css) {
    const first = $$(css).first();
    return first.getText();
  }

  getH1Text() {
    return element(by.css('app-root h1')).getText();
  }

  clickButton(selector) {
    return element(by.css(selector)).click();
  }
}
