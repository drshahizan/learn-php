
FROM gitpod/workspace-full:latest

USER gitpod

RUN npm i jest@24.8.0 -g
RUN npm i @learnpack/learnpack@2.1.20 -g && learnpack plugins:install learnpack-html@0.0.20
