import { AppPage } from './app.po';
import { by, element} from 'protractor';

describe('workspace-project App', () => {
  let page: AppPage;

  beforeEach(() => {
    page = new AppPage();
  });

  it('should display dashboard', () => {
    page.navigateTo();
    expect(page.getH1Text()).toEqual('Dashboard');
  });

  it('should load subnets', () => {
    page.navigateTo();
    page.clickButton('button.btn');
    expect(element(by.css('.mat-accordion')).isDisplayed(true));
    expect(page.getContentByFirstElement('.mat-expansion-panel-header')).toContain('152.178.91.0/28');
  });
});
