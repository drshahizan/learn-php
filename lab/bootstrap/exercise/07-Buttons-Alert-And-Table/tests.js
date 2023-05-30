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

describe("1. You should use a main container with a row and 2 columns", function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
        //apply the styles from the stylesheet if needed

    });
    afterEach(() => {
        jest.resetModules();
    });

    it("You should use a main container fluid", function () {
        let div = document.querySelector("div");
        expect(div).toBeTruthy();
        expect(div.classList.contains("container-fluid")).toBeTruthy();
    })

    it("You should have a row inside the main container", function () {
        let row = document.querySelector(".container-fluid").querySelector(".row");
        expect(row).toBeTruthy();
    })

    it("The row should contain 2 columns with the same width", function () {
        let cols = document.querySelector(".container-fluid").querySelector(".row").querySelectorAll("div");
        expect(cols[0].classList.contains("col") || cols[0].classList.contains("col-6")).toBeTruthy();
        expect(cols[1].classList.contains("col") || cols[1].classList.contains("col-6")).toBeTruthy();
    })
});

describe("2. The Left column should contain all the required elements in the correct position and width the correct style", function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
        //apply the styles from the stylesheet if needed

    });
    afterEach(() => {
        jest.resetModules();
    });

    it("The first element should be an H5 tag", function () {
        let col = document.querySelector(".container-fluid").querySelector(".row").querySelectorAll("div")[0];
        expect(col.children[0].nodeName).toBe("H5");
    })

    it("The second element should be a paragraph", function () {
        let col = document.querySelector(".container-fluid").querySelector(".row").querySelectorAll("div")[0];
        expect(col.children[1].nodeName).toBe("P");
    })

    it("The third elements should be 2 buttons", function () {
        let col = document.querySelector(".container-fluid").querySelector(".row").querySelectorAll("div")[0].children;
        expect(col[2].nodeName).toBe("BUTTON");
        expect(col[2].nodeName).toBe("BUTTON");
        expect(col[2].classList.contains("btn")).toBeTruthy();
        expect(col[2].classList.contains("btn-success")).toBeTruthy();
        expect(col[3].classList.contains("btn")).toBeTruthy();
        expect(col[3].classList.contains("btn-danger")).toBeTruthy();
    })
});

describe("3. The RIGHT column should contain all the required elements in the correct position and with the correct style", function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
        //apply the styles from the stylesheet if needed

    });
    afterEach(() => {
        jest.resetModules();
    });

    it("The first element should be an alert", function () {
        let col = document.querySelector(".container-fluid").querySelector(".row").querySelectorAll("div")[1].children;

        expect(col[0].nodeName).toBe("DIV");
        expect(col[0].classList.contains("alert")).toBeTruthy();
        expect(col[0].classList.contains("alert-warning")).toBeTruthy();
    })

    it("The second element should be TABLE with striped rows", function () {
        let col = document.querySelector(".container-fluid").querySelector(".row").querySelectorAll("div")[1].children;

        expect(col[1].nodeName).toBe("TABLE");
        expect(col[1].classList.contains("table")).toBeTruthy();
        expect(col[1].classList.contains("table-striped")).toBeTruthy();
    })

    it("The TABLE should contain 3 Columns and 3 Rows ", function () {
        let table=document.querySelector("table").children;

        expect(table.length).toBe(2);
        expect(table[0].nodeName).toBe("THEAD");
        expect(table[1].nodeName).toBe("TBODY");
        expect(table[1].children[0].children.length).toBe(3);
        expect(table[1].children[1].children.length).toBe(3);
        expect(table[1].children[1].children.length).toBe(3);
    })
});
