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
});

describe('1. All the rules to create the first section should be applied.', function () {

    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
    });
    afterEach(() => {jest.resetModules();});

    it('The body should contain a div tag with the class container-fluid', function () {
        let div = document.querySelector("div");

        expect(div).toBeTruthy();
        expect(div.classList.contains("container-fluid")).toBeTruthy();
    });

    it(`The first element of the first section should be an H1 tag`, function () {
        let div = document.querySelector(".container-fluid")
        expect(div).toBeTruthy();

        let row = div.querySelector(".row");
        expect(row).toBeTruthy();

        let h1 = row.querySelector("h1");
        expect(h1).toBeTruthy();
    });

    it(`The second element of the first section should be a P tag`, function () {
        let div = document.querySelector(".container-fluid")
        expect(div).toBeTruthy();

        let row = div.querySelector(".row");
        expect(row).toBeTruthy();

        let p = row.querySelector("p");
        expect(p).toBeTruthy();
    });

    it(`The third element of the first section should be a button tag with a blue button class`, function () {
        let div = document.querySelector(".container-fluid")
        expect(div).toBeTruthy();

        let row = div.querySelector(".row");
        expect(row).toBeTruthy();

        let button = row.querySelector("button");
        expect(button).toBeTruthy();
        expect(button.classList.contains("btn")).toBeTruthy();
        expect(button.classList.contains("btn-primary")).toBeTruthy();

    });
});

describe('2. All the rules to create the second row should be applied', function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
    });
    afterEach(() => {jest.resetModules()});

    it('The second sections should contain three columns of the same width', function () {
        let secondSection = document.querySelectorAll(".row")[1];
        expect(secondSection).toBeTruthy();

        let cols = secondSection.querySelectorAll("div")
        expect(cols[0].classList.contains("col") || cols[0].classList.contains("col-4")).toBeTruthy();
        expect(cols[1].classList.contains("col") || cols[1].classList.contains("col-4")).toBeTruthy();
        expect(cols[2].classList.contains("col") || cols[2].classList.contains("col-4")).toBeTruthy();
    })

    it('The 3 columns should contain an H2, a p and a button ', function () {
        let secondSection = document.querySelectorAll(".row")[1];
        expect(secondSection).toBeTruthy();

        let cols = secondSection.querySelectorAll("div")
        for(let i = 0; i < cols.length; i++) {
            let h2 = cols[i].querySelector("h2");
            let p = cols[i].querySelector("p");
            let button = cols[i].querySelector("button");
            expect(h2).toBeTruthy();
            expect(p).toBeTruthy();
            expect(button).toBeTruthy();
        }
    });
});