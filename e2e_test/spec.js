

describe('Protractor Demo App', function() {
  it('should fill the form', function() {
    browser.get('http://localhost/');
    browser.debugger();
    //browser.pause();
    element(by.model('user1Data.name')).sendKeys('haja');
    element(by.model('user1Data.email')).sendKeys('haja@ds.com');
    element(by.model('user1Data.phone_number')).sendKeys('12345');
    element(by.id('register')).click();

	expect(element(by.id('thank')).isDisplayed()).toBe(true); 

  });
});