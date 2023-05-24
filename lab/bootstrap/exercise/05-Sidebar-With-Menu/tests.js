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

    it('The body should contain a div tag with the class container-fluid', function () {
        let div = document.querySelector("div");

        expect(div).toBeTruthy();
        expect(div.classList.contains("container-fluid")).toBeTruthy();
    });

    it('The div tag should contain a <div> with class row', function () {
        let div = document.querySelector(".container-fluid").querySelector("div");

        expect(div).toBeTruthy();
        expect(div.classList.contains("row")).toBeTruthy();
    });

    it('The row should contain 2 columns with 2 and 10 slots', function () {
        let row = document.querySelector(".container-fluid").querySelector(".row");
        expect(row).toBeTruthy();

        let col2 = row.querySelector(".col-2")
        let col10 = row.querySelector(".col-10")
        expect(col2).toBeTruthy();
        expect(col10).toBeTruthy();
    });

    it('The left column should contain a <ul> tag with the classes nav and flex-column', function () {
        let ul = document.querySelector(".col-2").querySelector("ul");

        expect(ul).toBeTruthy();
        expect(ul.classList.contains("nav")).toBeTruthy();
        expect(ul.classList.contains("flex-column")).toBeTruthy();

    });

    it('The background color of the second column should be gray', function(){
        let col10 = document.querySelector(".col-10")
        expect(col10.classList.contains("bg-secondary")).toBeTruthy();
    })

    it('The second column should contain an H4, a p and a button', function () {
        let col10 = document.querySelector(".col-10")
        expect(col10).toBeTruthy();

        let h4 = col10.querySelector("h4");
        let p = col10.querySelector("p");
        let button = col10.querySelector("button");

        expect(h4).toBeTruthy();
        expect(p).toBeTruthy();
        expect(button).toBeTruthy();
    });

    it('The button in the second column should be blue', function () {
        let button = document.querySelector(".col-10").querySelector("button");

        expect(button).toBeTruthy();
        expect(button.classList.contains("btn")).toBeTruthy();
        expect(button.classList.contains("btn-primary")).toBeTruthy();
    });
});