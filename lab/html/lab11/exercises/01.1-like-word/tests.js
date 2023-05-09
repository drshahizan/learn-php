const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('You should create a <p> tag.', function () {
    let p = document.querySelector("p")
    expect(p).toBeTruthy();
});

it('The <p> tag should have the expected value.', function () {
    let p = document.querySelector("p")
    expect(p).toBeTruthy();
    expect(p.innerHTML.toLowerCase()).toContain("html tags are similar to ms word elements")
});

it('Add "HTML tags are similar to MS Word elements" between the <p> tags → <p>HERE</p> ', function () {
    let p = document.querySelector("p")
    const _regex = /\s*HTML\s*tags\s*are\s*similar\s*to\s*MS\s*Word\s*elements\s*/gm;
    expect(_regex.test(p.innerHTML)).toBe(true);
});
