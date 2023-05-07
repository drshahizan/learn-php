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
        let head = document.querySelector("head");
        let meta = head.querySelectorAll("meta");
        let link = head.querySelector("link").href;
        let title = head.querySelector("title").innerHTML;

        expect(meta.length).toBe(2)
        expect(link).toBe("https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css")
        expect(title).toBe("08 Bootstrap Forms")
    })

    it("You should not use the style tag.", function (){
        let style = document.querySelector('style')
        expect(style).toBeFalsy()
    })

    it("Do not use any inline styles, just use the bootstrap classes for styling", function () {
        expect(html.toString().match(/style(\s*)=(\s*)["']/)).toBeFalsy();
    });

    it("You should create a form tag", () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy()
    })

    it("The form should have a dark-grey background color", () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy()
        expect(form.classList.contains("bg-secondary")).toBeTruthy()
    })

    it("The form should have a rounded border", () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy()
        expect(form.classList.contains("rounded")).toBeTruthy()
    })

    it('The form should have an <h2> tag that says "Please login"', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let h2 = form.querySelector("h2")
        expect(h2).toBeTruthy()
        expect(h2.innerHTML.trim()).toBe("Please login")
    })

    it('The form should have an <input> tag with a placeholder that says "Email Address" and type "email"', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let inputs = form.querySelectorAll("input")
        expect(inputs.length).toBe(3)
        expect(inputs[0].placeholder.trim()).toBe("Email Address")
        expect(inputs[0].type.trim()).toBe("email")
    })

    it('The form should have an <input> tag with a placeholder that says "Password" and type "password"', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let inputs = form.querySelectorAll("input")
        expect(inputs.length).toBe(3)
        expect(inputs[1].placeholder.trim()).toBe("Password")
        expect(inputs[1].type.trim()).toBe("password")
    })

    it('The form should have an <input> tag with type "checkbox"', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let inputs = form.querySelectorAll("input")
        expect(inputs.length).toBe(3)
        expect(inputs[2].type.trim()).toBe("checkbox")
    })

    it('The checkbox should have a side text "Remember me"', () => {
        let rememberMe = html.toString().indexOf("Remember me")
        let checkbox = html.toString().indexOf("checkbox")
        expect(rememberMe).toBeTruthy()

        // This is how I check if it comes after the checkbox
        expect(rememberMe).toBeGreaterThan(checkbox)
    })

    it('The form should have a button', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let button = form.querySelector("button")
        expect(button).toBeTruthy()
    })

    it('The form should have a button with a blue background color', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let button = form.querySelector("button")
        expect(button).toBeTruthy()
        expect(button.classList.contains("btn-primary") || button.classList.contains("bg-primary")).toBeTruthy()
    })

    it('The form should have a button with a width of 100%', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let button = form.querySelector("button")
        expect(button).toBeTruthy()
        expect(button.classList.contains("col-12") || button.classList.contains("w-100")).toBeTruthy()
    })

    it('The form should have a button that says "Login"', () => {
        let form = document.querySelector("form")
        expect(form).toBeTruthy();
        
        let button = form.querySelector("button")
        expect(button).toBeTruthy()
        expect(button.innerHTML.trim()).toBe("Login")
    })
});