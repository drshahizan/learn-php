const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create an <h1> tag inside the <body>.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let h1 = body.querySelector("h1");
    expect(h1).toBeTruthy();
})

it('You should create 3 <p> tags inside the <body>.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let p = body.querySelectorAll("p");
    // It is greater than one because this problem can be solved with two or three p tags
    expect(p.length).toBeGreaterThan(1);
})

it('You should create a <blockquote> tag inside the <body>.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let blockquote = body.querySelector("blockquote");
    expect(blockquote).toBeTruthy();
})

it('You should create a <ul> with 3 <li> tags inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let ul = body.querySelector("ul");
    expect(ul).toBeTruthy();

    let lis = ul.querySelectorAll("li");
    expect(lis.length).toBe(3);
})
