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

it('You should create two <h2> tags inside the <body>.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let h2 = body.querySelectorAll("h2");
    expect(h2.length).toBe(2);
})

it('You should create a <p> tag inside the <body>.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let p = body.querySelector("p");
    expect(p).toBeTruthy();
})

it('You should create an <ol> with 3 <li> tags inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let ol = body.querySelector("ol");
    expect(ol).toBeTruthy();

    let lis = ol.querySelectorAll("li");
    expect(lis.length).toBe(3);
})

it('You should create a <ul> with 3 <li> tags inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let ul = body.querySelector("ul");
    expect(ul).toBeTruthy();

    let lis = ul.querySelectorAll("li");
    expect(lis.length).toBe(3);
})
