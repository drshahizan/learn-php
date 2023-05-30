const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create an <html> tag.', function () {
    let html = document.querySelector("html")
    expect(html).toBeTruthy();
})

it('You should create a <body> tag inside the <html> tag.', function () {
    let html = document.querySelector("html");
    expect(html).toBeTruthy();

    let body = html.querySelector("body");
    expect(body).toBeTruthy();
})

it('You should create an <h1> tag inside the <body> tag.', function () {
    let html = document.querySelector("html");
    expect(html).toBeTruthy();

    let body = html.querySelector("body");
    expect(body).toBeTruthy();

    let h1 = body.querySelector("h1");
    expect(h1).toBeTruthy();
})

it('The <h1> tag should have your name as value (It shouldn\'t be empty).', function () {
    let html = document.querySelector("html");
    expect(html).toBeTruthy();

    let body = html.querySelector("body");
    expect(body).toBeTruthy();

    let h1 = body.querySelector("h1");
    expect(h1).toBeTruthy();

    expect(h1.innerHTML).not.toBe("");
})