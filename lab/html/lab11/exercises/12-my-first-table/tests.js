const fs = require('fs');
const path = require('path');
const html = fs.readFileSync(path.resolve(__dirname, './index.html'), 'utf8');
document.documentElement.innerHTML = html.toString();

jest.dontMock('fs');

it('The table tag should exist, and it should have a width of 100% and a border of 1', function () {
    const tableTag = document.querySelector("table")
    expect(tableTag).toBeTruthy()
    expect(tableTag.width).toBe("100%")
    expect(tableTag.border).toBe("1")
})

it('The first row of the table should have red background and a height of 40px', function () {
    const allTR = document.querySelectorAll("tr")
    expect(allTR[0].style.backgroundColor).toBe("red")
    expect(allTR[0].getAttribute('height')).toBe("40px")
})

it('All <tr> tags exist (They should be 4)', function () {
    const allTR = document.querySelectorAll("tr")
    expect(allTR.length).toBe(4);
})

it('All <th> tags should exist with the proper innerHTML', function () {
    const allTH = document.querySelectorAll("th")
    expect(allTH.length).toBe(3)
    expect(allTH[0].innerHTML.toLowerCase()).toContain(`name`)
    expect(allTH[1].innerHTML.toLowerCase()).toContain(`last name`)
    expect(allTH[2].innerHTML.toLowerCase()).toContain(`phone number`)
})

it('All <td> tags should exist with the proper innerHTML', function () {
    const allTD = document.querySelectorAll("td")
    expect(allTD.length).toBe(9)
    for (let i = 0; i < allTD.length; i++) {
        expect(allTD[i].innerHTML).toBeTruthy()
    }
})

