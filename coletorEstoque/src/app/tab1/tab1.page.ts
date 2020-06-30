import { Component } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { HttpService } from '../service/http.service';
import { FormValidators } from '../enum/form-validators.enum';

@Component({
  selector: 'app-tab1',
  templateUrl: 'tab1.page.html',
  styleUrls: ['tab1.page.scss'],
})
export class Tab1Page {
  public ionicForm: FormGroup;
  public isSubmitted = false;
  public list: Array<any>;

  constructor(private fb: FormBuilder, private http: HttpService) {
    this.ionicForm = this.fb.group({
      idEstoque: [0],
      idProduto: ['', Validators.required],
      qtde: ['', Validators.required],
    });

    this.all();
  }

  async all() {
    this.list = await this.http.get('produto/');
  }

  get frmValidators() {
    return FormValidators;
  }

  get f(): any {
    return this.ionicForm.controls;
  }

  get v(): any {
    return this.ionicForm.value;
  }

  async onSubmit(): Promise<void> {
    this.isSubmitted = true;

    if (this.ionicForm.invalid) {
      return;
    }

    const obj: any = this.v;
    const result: any = await this.http.post('produto/', obj);

    if (result.status) {
      alert('OK');
    } else {
      alert(result.msg);
    }
  }
}
