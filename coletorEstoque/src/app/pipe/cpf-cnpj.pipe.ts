import { Pipe, PipeTransform } from '@angular/core';

// <td>{{ obj.cnpj | cpfCnpj }}</td>
@Pipe({
  name: 'cpfCnpj',
})
export class CpfCnpjPipe implements PipeTransform {
  transform(value: string): string {
    let newVal = value;
    if (newVal.length <= 11) {
      newVal = newVal.replace(/^(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/, '$1.$2.$3-$2');
    } else {
      newVal = newVal.replace(/^(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/, '$1.$2.$3/$4-$5');
    }
    return newVal;
  }
}
