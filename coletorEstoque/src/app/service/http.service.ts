import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root',
})
export class HttpService {
  public url: string;

  constructor(public http: HttpClient) {
    this.url = 'http://localhost:9086/html/emm/curso-gew/php/';
  }

  async get(path: string): Promise<any> {
    console.log('get');

    return new Promise((resolve, reject) => {
      this.http.get(this.url + path).subscribe(
        async (data: any) => {
          console.log('get');
          console.log(data);
          resolve(data.result);
        },
        async (err: any) => {
          console.log(err);
          reject(err);
        }
      );
    });
  }

  async post(path: string, obj: any): Promise<any> {
    console.log('post');

    return new Promise((resolve, reject) => {
      this.http.post(this.url + path, obj).subscribe(
        async (data: any) => {
          console.log('post');
          console.log(data);
          resolve(data.result);
        },
        async (err: any) => {
          console.log(err);
          reject(err);
        }
      );
    });
  }

  async delete(path: string): Promise<any> {
    console.log('delete');

    return new Promise((resolve, reject) => {
      this.http.delete(this.url + path).subscribe(
        async (data: any) => {
          console.log('delete');
          console.log(data);
          resolve(data.result);
        },
        async (err: any) => {
          console.log(err);
          reject(err);
        }
      );
    });
  }
}
