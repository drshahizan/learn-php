const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create a <table> tag inside the <body>.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let table = body.querySelector("table");
    expect(table).toBeTruthy();
})

it('The <table> tag should have border="0".', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let table = body.querySelector("table");
    expect(table).toBeTruthy();

    expect(table.border).toBe("0");
})

it('The <table> tag should have a <tr> tag inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let table = body.querySelector("table");
    expect(table).toBeTruthy();

    let tr = table.querySelector("tr");
    expect(tr).toBeTruthy();
})

it('The <tr> tag should have 2 <td> tags inside.', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let table = body.querySelector("table");
    expect(table).toBeTruthy();

    let tr = table.querySelector("tr");
    expect(tr).toBeTruthy();

    let tds = tr.querySelectorAll("td");
    expect(tds.length).toBe(2);
})

it('The first <td> tag should have an <img> tag inside, and a width of "25%".', function () {
    let body = document.querySelector("body");
    expect(body).toBeTruthy();

    let table = body.querySelector("table");
    expect(table).toBeTruthy();

    let tr = table.querySelector("tr");
    expect(tr).toBeTruthy();

    let td = tr.querySelectorAll("td")[0];
    expect(td).toBeTruthy();
    expect(td.width).toBe("25%")

    let img = td.querySelector("img");
    expect(img).toBeTruthy();
})
