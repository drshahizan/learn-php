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

    it('You should not change the first row', function () {
        let divContent=document.querySelectorAll(".row")[0].innerHTML
        
        expect(divContent.toString().indexOf(`<div class="col-6">First col</div>`)>-1).toBeTruthy();
        expect(divContent.toString().indexOf(`<div class="col-6">Second col</div>`)>-1).toBeTruthy();
    });

    it('The second row should contain 3 columns of the same width', function () {
        let secondRow = document.querySelectorAll(".row")[1]
        expect(secondRow.childElementCount).toBe(3)

        let cols = secondRow.querySelectorAll("div")
        expect(cols[0].classList.contains("col") || cols[0].classList.contains("col-4")).toBeTruthy();
        expect(cols[1].classList.contains("col") || cols[1].classList.contains("col-4")).toBeTruthy();
        expect(cols[2].classList.contains("col") || cols[2].classList.contains("col-4")).toBeTruthy();
    });

    it('You should create a third row with one column of 12 slot and the background red', function () {
        let thirdRow = document.querySelectorAll(".row")[2]
        expect(thirdRow).toBeTruthy();

        let div = thirdRow.querySelector("div");
        expect(div).toBeTruthy();
        expect(div.classList.contains("col-12") || div.classList.contains("col")).toBeTruthy();
        expect(div.classList.contains("bg-danger")).toBeTruthy();
        expect(div.innerHTML.toString()).toBeTruthy();
    });
    
    it('The main div tag should contain the class container-fluid', function () {
        let div = document.querySelector("body").querySelector("div");
        expect(div).toBeTruthy();
        expect(div.classList.contains("container-fluid")).toBeTruthy();
    });

});