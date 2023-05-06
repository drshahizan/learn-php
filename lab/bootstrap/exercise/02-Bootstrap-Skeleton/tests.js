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

        expect(meta1).not.toBe(-1)
        expect(meta2).not.toBe(-1)
        expect(title).toBeTruthy();
    })

    it("You should not use the style tag.", function (){
        let style = document.querySelector('style')
        expect(style).toBe(null)
    })
});
describe('1. All the rules in the instructions should be applied', function () {
    beforeEach(() => {
        //here I import the HTML into the document
        document.documentElement.innerHTML=html.toString();
    });
    afterEach(() => {jest.resetModules();});

    it('The head tag should contain the link tag for Bootstrap', function () {
        let head = document.querySelector("head").innerHTML
        expect(head.toString().indexOf(`<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">`)>-1).toBeTruthy();
    });
    
    it('The body should contain a div tag with the class container-fluid', function () {
        let div = document.querySelector("div")
        expect(div).toBeTruthy();
        expect(div.classList.contains("container-fluid")).toBeTruthy();
    });

    it('The div tag should wrap the existing h1 and p tags', function () {
        let h1 = document.querySelector("div").querySelector("h1")
        let p = document.querySelector("div").querySelector("p")
        expect(h1).toBeTruthy();
        expect(p).toBeTruthy();
    });

    it('The h1 should contain the same innerHTML', function(){
        let h1 = document.querySelector("div").querySelector("h1").innerHTML
        expect(h1).toBe("This is my first example using bootstrap")
    })

    it('The p should contain the same innerHTML', function(){
        let p = document.querySelector("div").querySelector("p").innerHTML
        expect(p).toBe("I can't believe that bootstap is so easy, now HTML and CSS are a simple but very useful technology.")
    })
});
