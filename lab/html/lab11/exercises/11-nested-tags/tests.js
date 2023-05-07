const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create an <h1> tag with an <i> tag inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let h1 = body.querySelector("h1");
    expect(h1).toBeTruthy();
    
    let i = h1.querySelector("i");
    expect(i).toBeTruthy();
})

it('You should create a <p> tag with a <strong> tag inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let p = body.querySelector("p");
    expect(p).toBeTruthy();

    let strong = p.querySelector("strong");
    expect(strong).toBeTruthy();
})

it('You should create an <a> tag with an <h2> and a <p> tags inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let a = body.querySelector("a");
    expect(a).toBeTruthy();

    let h2 = a.querySelector("h2");
    expect(h2).toBeTruthy();

    let p = a.querySelector("p");
    expect(p).toBeTruthy();
})
