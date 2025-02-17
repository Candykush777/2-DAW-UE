/* The configuration can also be changed at the level of the whole object (not only its individual properties).

The following methods are used for this purpose, among others:

Object.preventExtensions(obj) – after calling this method, we won't be able to add new properties to the object obj;
Object.seal(obj) – does not allow the adding, removing, or reconfiguring of the properties of the object obj;
Object.freeze(obj) – similar to Object.seal, but additionally makes it impossible to change the value of the property.

We also have methods to check if the object configuration has been changed.

And so, we can use these methods respectively: Object.isExtensible, Object.isSealed(obj) and Object.isFrozen(obj). */
