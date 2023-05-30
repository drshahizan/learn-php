const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create an <a> tag inside the <body> tag.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let a = body.querySelector("a");
    expect(a).toBeTruthy();
})

it('The <a> tag should have google\'s link as the "href".', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let a = body.querySelector("a");
    expect(a).toBeTruthy();

    expect(a.href).toContain("https://google.com");
})