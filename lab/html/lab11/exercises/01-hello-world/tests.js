const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('Add a <span> tag.', function () {
    let span = document.querySelector("span");
    expect(span).toBeTruthy();
});

it('Add a <strong> tag.', function () {
    let strong = document.querySelector("strong");
    expect(strong).toBeTruthy();
});

it('The <span> tag should have the expected value.', function () {
    let span = document.querySelector("span");
    expect(span).toBeTruthy();
    expect(span.innerHTML.toLowerCase()).toContain("hello, i am a text")
});

it('The <strong> tag should have the expected value.', function () {
    let strong = document.querySelector("strong");
    expect(strong).toBeTruthy();
    expect(strong.innerHTML.toLowerCase()).toContain("hello, i am also a text but in bold")
});