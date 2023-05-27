const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('There should be 2 <a> tags inside the <body> tag.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let a = body.querySelectorAll("a");
    expect(a.length).toBe(2);
})

it('The first <a> tag should have an "href" pointing to the id "#lowerSide".', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let a = body.querySelectorAll("a")[0];
    expect(a).toBeTruthy();

    expect(a.href).toContain("#lowerSide");
})

it('The second <a> tag should have an "href" pointing to the id "#upperSide".', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let a = body.querySelectorAll("a")[1];
    expect(a).toBeTruthy();

    expect(a.href).toContain("#upperSide");
})