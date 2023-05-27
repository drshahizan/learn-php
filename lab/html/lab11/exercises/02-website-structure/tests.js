const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString()

jest.dontMock('fs');

it('You should create an <html> tag.', function () {
    let html = document.querySelector("html")
    expect(html).toBeTruthy();
})

it('You should create a <head> tag inside the <html> tag.', function () {
    let html = document.querySelector("html");
    expect(html).toBeTruthy();

    let head = html.querySelector("head");
    expect(head).toBeTruthy();
})

it('You should create a <title> tag inside the <head> tag.', function () {
    let html = document.querySelector("html");
    expect(html).toBeTruthy();

    let head = html.querySelector("head");
    expect(head).toBeTruthy();

    let title = head.querySelector("title");
    expect(title).toBeTruthy();
})

it('The <title> tag should have "Hello World" as value.', function () {
    let html = document.querySelector("html");
    expect(html).toBeTruthy();

    let head = html.querySelector("head");
    expect(head).toBeTruthy();

    let title = head.querySelector("title");
    expect(title).toBeTruthy();

    expect(title.innerHTML.toLowerCase()).toContain("hello world");
})