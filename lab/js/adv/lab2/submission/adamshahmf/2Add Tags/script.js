const ul = document.querySelector("ul"),
input = document.querySelector("input"),
tagNumb = document.querySelector(".details span");

let maxTags = 10,
tags = ["web", "programming", "javascript"];

countTags();
createTag();

function countTags(){
    input.focus();
    tagNumb.innerText = maxTags - tags.length;
}

function createTag(){
    ul.querySelectorAll("li").forEach(li => li.remove());
    tags.slice().reverse().forEach(tag =>{
        let liTag = `<li>${tag} <i class="uit uit-multiply" onclick="remove(this, '${tag}')"></i></li>`;
        ul.insertAdjacentHTML("afterbegin", liTag);
    });
    countTags();
}

function remove(element, tag){
    let index  = tags.indexOf(tag);
    tags = [...tags.slice(0, index), ...tags.slice(index + 1)];
    element.parentElement.remove();
    countTags();
}

function addTag(e){
    if(e.key == "Enter"){
        let tag = e.target.value.replace(/\s+/g, ' ');
        if(tag.length > 1 && !tags.includes(tag)){
            if(tags.length < 10){
                tag.split(',').forEach(tag => {
                    tags.push(tag);
                    createTag();
                });
            }
        }
        e.target.value = "";
    }
}

input.addEventListener("keyup", addTag);

const removeBtn = document.querySelector(".details button");
removeBtn.addEventListener("click", () =>{
    tags.length = 0;
    ul.querySelectorAll("li").forEach(li => li.remove());
    countTags();
});
