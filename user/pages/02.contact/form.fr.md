---
title: Contact
form:
    name: contact
    fields:
        name:
            label: Nom
            placeholder: 'Entrée votre nom'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        email:
            label: Email
            placeholder: 'Entrée votre adresse email'
            type: email
            validate:
                required: true
        message:
            label: Message
            placeholder: 'Entrée votre message'
            type: textarea
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: Envoyer
    process:
        save:
            fileprefix: contact-
            dateformat: Ymd-His-u
            extension: txt
            body: '{% include ''forms/data.txt.twig'' %}'
        email:
            subject: '[Site Contact Form] {{ form.value.name|e }}'
            body: '{% include ''forms/data.html.twig'' %}'
        message: 'Thank you for getting in touch!'
        display: formdata
metadata:
    'og:url': 'http://localhost/accrobranche--projet-cesi/fr/contact'
    'og:type': website
    'og:title': 'Contact | Accro-branch&eacute;'
    'og:author': 'Accrobranch&eacute;'
    'twitter:card': summary_large_image
    'twitter:title': 'Contact | Accro-branch&eacute;'
    'article:published_time': '2020-10-26T10:03:57+01:00'
    'article:modified_time': '2020-10-26T10:25:54+01:00'
    'article:author': 'Accrobranch&eacute;'
---

