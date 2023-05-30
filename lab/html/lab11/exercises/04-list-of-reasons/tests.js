const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create an <ol> tag inside the <body> tag.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let ol = body.querySelector("ol")
    expect(ol).toBeTruthy();
})

it('The <ol> tag should have 6 <li> inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let ol = body.querySelector("ol");
    expect(ol).toBeTruthy();

    let lis = ol.querySelectorAll('li');
    expect(lis.length).toBe(6);
})
