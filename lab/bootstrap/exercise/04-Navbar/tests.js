const fs=require("fs");
const path=require("path");
const html=fs.readFileSync(path.resolve(__dirname, "./index.html"), "utf8");

jest.dontMock("fs");

describe("All the tests should pass", function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();

        //apply the styles from the stylesheet if needed

    });
    afterEach(() => {
        jest.resetModules();
    });
    it("You should not change or delete the existing elements in the head tag", function () {
        let meta1 = document.querySelector('head').innerHTML.toString().indexOf("<meta c")
        let meta2 = document.querySelector('head').innerHTML.toString().indexOf("<meta n")        
        let title = document.querySelector('head').querySelector("title")
        let bootstrapLink = document.querySelector("head").innerHTML.toString().indexOf(`<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">`)

        expect(meta1).not.toBe(-1)
        expect(meta2).not.toBe(-1)
        expect(title).toBeTruthy();
        expect(bootstrapLink>-1).toBeTruthy();
    })

    it("You should not use the style tag.", function (){
        let style = document.querySelector('style')
        expect(style).toBe(null)
    })

    it("Do not use any inline styles, just use the bootstrap classes for styling", function () {
        expect(html.toString().match(/style(\s*)=(\s*)["']/)).toBeFalsy();
    });

    it('The ul tag should contain the class nav and nav-tabs', function () {
        let ul = document.querySelector("ul");

        expect(ul).toBeTruthy();
        expect(ul.classList.contains("nav-tabs")).toBeTruthy();
        expect(ul.classList.contains("nav")).toBeTruthy();
    });

    it('The li tags should contain the class nav-item', function () {
        const li = document.querySelectorAll("li");

        expect(li).toBeTruthy();
        expect(li[0].classList.contains("nav-item")).toBeTruthy();
        expect(li[1].classList.contains("nav-item")).toBeTruthy();
        expect(li[2].classList.contains("nav-item")).toBeTruthy();
    });
});