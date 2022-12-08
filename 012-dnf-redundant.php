<?php
interface A {}
interface B {}

interface I {
    function f(): (A&B)|(B&A); // これはエラー
}
