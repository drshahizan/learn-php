const fs=require("fs");
const path=require("path");
const html=fs.readFileSync(path.resolve(__dirname, "./index.html"), "utf8");

jest.dontMock("fs");

describe("All the tests should pass", function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();

    });
    afterEach(() => {
        jest.resetModules();
    });
    it("You should not change or delete the existing elements in the head tag", function () {
        let head = document.querySelector('head')
        expect(head).toBeTruthy();

        let meta1 = head.innerHTML.toString().indexOf("<meta c")
        let meta2 = head.innerHTML.toString().indexOf("<meta n")
        let title = head.querySelector("title")

        expect(meta1).not.toBe(-1)
        expect(meta2).not.toBe(-1)
        expect(title).not.toBe(null)
    })
});

describe('1. The html code should contain the link tag and 2 Boostrap script tags', function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
    });
    afterEach(() => {jest.resetModules();});
    it('The head tag should contain the link tag for Bootstrap', function () {
        let bodyContent=document.querySelector("head").innerHTML
        // we can read from the source code
        // console.log(html.toString());
        expect(bodyContent.toString().indexOf(`<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">`)>-1).toBeTruthy();
    });
    it('The body should contain 2 script tags before the body closing tag', function () {
        let scripts = document.querySelectorAll('script')

        expect(scripts[0].src).toBe("https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js")
        expect(scripts[1].src).toBe("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js")
    });
});