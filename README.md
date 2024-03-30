
# K-URP-Sys (K-User Role and Permission System)

K-URP-Sys is a User Role and Permission System built with Laravel. It provides a robust and flexible way to manage user roles and permissions in your application.

## Features

- User management: Create, update, and delete users.
- Role management: Create, update, and delete roles.
- Permission management: Create, update, and delete permissions.
- Assign roles and permissions to users.
- Check user's roles and permissions.

## Installation

Provide the steps to install your project here.

## Usage

Provide the steps to use your project here.

## PermissionResource.php

This file is responsible for transforming the `Permission` model into an array for API responses.

### form Method

This method defines the form for creating or editing permissions. It includes a text input for the 'name' attribute, which is required and must be unique.
