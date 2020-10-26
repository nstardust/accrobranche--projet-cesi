---
title: Contact
form:
    name: contact
    fields:
        name:
            label: Name
            placeholder: 'Enter your name'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        email:
            label: Email
            placeholder: 'Enter your email address'
            type: email
            validate:
                required: true
        message:
            label: Message
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
    buttons:
        submit:
            type: submit
            value: Submit
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
        display: thankyou
metadata:
    'og:url': 'http://localhost/accrobranche--projet-cesi/en/contact'
    'og:type': website
    'og:title': 'Contact | Accro-branch&eacute;'
    'og:author': 'Accrobranch&eacute;'
    'twitter:card': summary_large_image
    'twitter:title': 'Contact | Accro-branch&eacute;'
    'article:published_time': '2020-10-26T10:01:55+01:00'
    'article:modified_time': '2020-10-26T10:02:04+01:00'
    'article:author': 'Accrobranch&eacute;'
---

