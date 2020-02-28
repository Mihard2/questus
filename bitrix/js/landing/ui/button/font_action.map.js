{"version":3,"sources":["font_action.js"],"names":["BX","namespace","Landing","UI","Button","FontAction","id","options","EditorAction","apply","this","arguments","layout","classList","add","content","create","props","className","fontSize","Field","Range","title","Loc","getMessage","items","Array","length","map","item","index","value","name","jsDD","window","property","onDragStart","bind","onDragEnd","onChange","instances","push","hideAll","forEach","button","popup","close","prototype","constructor","__proto__","popupContainer","remove","postfix","selection","getSelection","range","getRangeAt","editable","Panel","EditorPanel","getInstance","currentElement","contains","startContainer","toString","document","execCommand","wrapper","parentNode","style","onClick","event","preventDefault","stopPropagation","createPopup","addEventListener","onPopupClick","contentContainer","appendChild","isShown","show","position","isFixed","adjustPosition","ColorAction","size","parseInt","getComputedStyle","getPropertyValue","setValue","DOM","read","popupRect","getBoundingClientRect","parentRect","offsetLeft","Math","abs","width","left","buttonRect","bottom","buttonPos","pos","write","prop","PopupWindow","autoHide","closeByEsc","noAllPaddings","zIndex"],"mappings":"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","file":"font_action.map.js"}