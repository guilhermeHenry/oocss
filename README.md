# oocss

## Variáveis globais

- center
- right
- center
- right
- content
- container
- image

## Proprieades com valores numéricos

Use a letra referente a propriedade e depois o valor numérico

```css
.f16{font-size: 1em;}
.l20{line-height: 1.25em;}
```

| prop          | prefixo | values                               | unidade |
| :------------ | ------: | ------------------------------------ | ------- |
| font-size     |       f | 1, 2, 4, 4, 5, 6 ... 48, 49, 50      | em      |
| font-weight   |       f | 100, 200, 300, ... 800, 900          | - - - - |
| line-height   |       l | 1, 2, 4, 4, 5, 6 ... 48, 49, 50      | em      |
| margin        |       m | 1, 2, 4, 4, 5, 6 ... 48, 49, 50      | px      |
| padding       |       p | 1, 2, 4, 4, 5, 6 ... 48, 49, 50      | px      |
| border-radius |       r | 1, 2, 3, 4, 5, 8, 10, 15 ... 50, 100 | px      |
| opacity       |       o | 0 - 0.1 - 0.2 ... 0-9 - 1            | - - - - |

## (prefixo)-(valor da propriedade)

| name                                                     |       prefixo | values exemple                                               | result                                             |
| :------------------------------------------------------- | ------------: | ------------------------------------------------------------ | -------------------------------------------------- |
| background-color                                         |            bg | red, green, yellow, blue, etc..                              | bg-red                                             |
| float                                                    |            fl | left, right, insue, etc..                                    | fl-left                                            |
| color<br>text-deconation<br>text-align<br>text-transform |            tx | red, yellow, blue, white, black, etc..<br/>underline, overline, line-through<br>left, right, center, justify, justify-all<br>uppercase, lowercase, capitalize | tx-red<br>tx-underline<br>tx-right<br>tx-uppercase |
| btn                                                      | color<br>type | red, yellow, blue, white, black, etc..<br>circule, light, dark | btn-red<br>btn-dark                                |
| font-style                                               |            fs | normal, italic, oblique, etc..                               | fs-nomal                                           |
| font-variant                                             |            fv | normal, small-caps, etc..                                    | fv-small-caps                                      |

## Sem a propriedade

Se você quiser resetar um propriedade use o prefixo **no-**  e o valor da propriedade


```css
.no-margin{background: red;}
.no-mt{margin-top: 0;}
.no-mb{margin-bottom: 0;}
.no-float{float: none;}
```

